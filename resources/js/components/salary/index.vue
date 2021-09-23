<template>
    <div class="page col-115">
        <div class="row col-md-12">
            <div class="col-md-6">
                <router-link
                    to="/given-salary"
                    class="btn btn-primary float-left"
                    >Pay an employee
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
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                <!-- Simple Tables -->
                <div class="card text-center">
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <h6 class="m-0 font-weight-bold text-primary">
                            All Salary Details
                        </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Month Name</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="salary in filtersearch.slice(0, 4)"
                                    :key="salary.id"
                                >
                                    <td>{{ salary.salary_month }}</td>

                                    <td>
                                        <router-link
                                            :to="{
                                                name: 'view-salary',
                                                params: {
                                                    id: salary.salary_month
                                                }
                                            }"
                                            class="btn btn-sm btn-primary"
                                            >View Salary</router-link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- Card #2 -->

            <div
                v-if="filtersearch.length >= 4"
                class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center"
            >
                <!-- Simple Tables -->
                <div class="card text-center">
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <h6 class="m-0 font-weight-bold text-primary">...</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Month Name</th>
                                    <th>Datails</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="salary in filtersearch.slice(4, 8)"
                                    :key="salary.id"
                                >
                                    <td>{{ salary.salary_month }}</td>

                                    <td>
                                        <router-link
                                            :to="{
                                                name: 'view-salary',
                                                params: {
                                                    id: salary.salary_month
                                                }
                                            }"
                                            class="btn btn-sm btn-primary"
                                            >View Salary</router-link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- Card #2 -->

            <!-- Card #3 -->

            <div
                v-if="filtersearch.length > 8"
                class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center"
            >
                <!-- Simple Tables -->
                <div class="card text-center">
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <h6 class="m-0 font-weight-bold text-primary">...</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Month Name</th>
                                    <th>Datails</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="salary in filtersearch.slice(8, 12)"
                                    :key="salary.id"
                                >
                                    <td>{{ salary.salary_month }}</td>

                                    <td>
                                        <router-link
                                            :to="{
                                                name: 'view-salary',
                                                params: {
                                                    id: salary.salary_month
                                                }
                                            }"
                                            class="btn btn-sm btn-primary"
                                            >View Salary</router-link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- Card #3 -->
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
            salaries: [],
            searchTerm: ""
        };
    },
    computed: {
        filtersearch() {
            return this.salaries.filter(salary => {
                return salary.salary_month.match(this.searchTerm);
            });
        }
    },

    methods: {
        allSalary() {
            axios
                .get("/api/salary/")
                .then(({ data }) => (this.salaries = data))
                .catch();
        }
    },
    created() {
        this.allSalary();
    }
};
</script>

<style type="text/css">
#em_photo {
    height: 40px;
    width: 40px;
}
</style>
