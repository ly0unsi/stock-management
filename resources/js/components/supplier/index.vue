<template>
    <div class="page ">
        <div class="row col-md-12">
            <div class="col-md-6">
                <router-link
                    to="/store-supplier"
                    class="btn btn-primary float-left"
                    >Add Supplier
                </router-link>
            </div>
            <div class="col-md-6 float-right">
                <input
                    type="text"
                    v-model="searchTerm"
                    class="form-control float-right"
                    style="width: 300px;"
                    placeholder="Search Here"
                />
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <h6 class="m-0 font-weight-bold text-primary">
                            Supplier List
                        </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Shop Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="supplier in filtersearch"
                                    :key="supplier.id"
                                >
                                    <td>{{ supplier.name }}</td>
                                    <td>
                                        <img
                                            :src="supplier.photo"
                                            class="rounded-circle"
                                            id="em_photo"
                                        />
                                    </td>
                                    <td class="text-center">
                                        {{ supplier.phone }}
                                    </td>
                                    <td class="text-center">
                                        {{ supplier.shopname }}
                                    </td>
                                    <td class="text-center">
                                        {{ supplier.email }}
                                    </td>
                                    <td class="text-center">
                                        <router-link
                                            :to="{
                                                name: 'edit-supplier',
                                                params: { id: supplier.id }
                                            }"
                                            class="btn btn-sm btn-primary"
                                            >Edit</router-link
                                        >

                                        <a
                                            @click="deleteSupplier(supplier.id)"
                                            class="btn btn-sm btn-danger"
                                            ><font color="#ffffff"
                                                >Delete</font
                                            ></a
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
</template>

<script type="text/javascript">
export default {
    created() {
        if (!User.loggedIn()) {
            this.$router.push({ name: "/" });
        }
    },
    data() {
        return {
            suppliers: [],
            searchTerm: ""
        };
    },
    computed: {
        filtersearch() {
            return this.suppliers.filter(supplier => {
                return supplier.name.match(this.searchTerm);
            });
        }
    },

    methods: {
        allSupplier() {
            axios
                .get("/api/supplier/")
                .then(({ data }) => (this.suppliers = data))
                .catch(console.log("err"));
        },
        deleteSupplier(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                if (result.value) {
                    axios
                        .delete("/api/supplier/" + id)
                        .then(() => {
                            this.suppliers = this.suppliers.filter(supplier => {
                                return supplier.id != id;
                            });
                        })
                        .catch(() => {
                            this.$router.push({ name: "supplier" });
                        });
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    );
                }
            });
        }
    },
    created() {
        this.allSupplier();
    }
};
</script>

<style type="text/css">
#em_photo {
    height: 40px;
    width: 40px;
}
</style>
