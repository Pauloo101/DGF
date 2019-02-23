<template>
    <div>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Request NO</th>
                <th>User name</th>
                <th>Product</th>
                <th>Requested Quantity</th>
                <th>Approved Quantity</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="temp in reques">
                <td>{{temp.operation_id}}{{temp.user_id}}</td>
                <td>{{temp.user_id}}</td>
                <td>{{temp.product_name}}</td>
                <td>{{temp.rquantity}}</td>
                <td>{{temp.aquantity}}</td>
                <td>{{temp.status}}</td>
                <td>{{temp.created_at}}</td>
                <td>
                    <div role="group" class="btn-group">
                        <button class="btn btn-info" data-toggle="modal"
                                data-target="#approve"
                                type="button">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-danger" type="button">
                            <i class="fa fa-trash"></i>
                        </button>

                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="modal fade" id="approve" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Enter the Approved Quantity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name"
                                       placeholder="Quantity"/>
                            </div>
                            <div class="form-group">
                                <label> Stock Quantity </label>
                                <input type="number" name="price" placeholder="Price"
                                       class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Status </label>
                                <select class="form-control">
                                    <option>pending</option>
                                    <option>approved</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                reques: [],
            }
        },
        created() {
            axios.get('/request-list')
                .then(({data}) => this.reques = data);
        }
    }

</script>