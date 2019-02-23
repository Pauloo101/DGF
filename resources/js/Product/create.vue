<template>
    <div>
        <button type="button" class="btn btn-success btn-sm shadow" data-toggle="modal"
                data-target="#exampleModalCenter">
            ADD <i class="fa fa-plus"></i>
        </button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createproduct" @keydown="form.onKeydown($event)">
                        <alert-error :form="form"></alert-error>
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" class="form-control" type="text" name="name"
                                       placeholder="Product Name"
                                       :class="{ 'is-invalid':form.errors.has('name')}"/>
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.price" type="number" name="price" placeholder="Price"
                                       class="form-control"
                                       :class="{ 'is-invalid':form.errors.has('price')}"/>
                                <has-error :form="form" field="price"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.quantity" type="number" name="quantity" placeholder="Quantity"
                                       class="form-control"
                                       :class="{'is-invalid':form.errors.has('quantity')}"/>
                                <has-error :form="form" field="quantity"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="form.category" placeholder="Select Category"
                                        name="category" class="form-control"
                                        :class="{'is-invalid':form.errors.has('category')}"
                                >
                                    <option value="1"> Tablets</option>
                                    <option value="2"> Creams</option>
                                </select>
                                <has-error :form="form" field="category"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="form.sale_rep" placeholder="Select Sale Rep" name="sale_rep"
                                        class="form-control"
                                        :class="{'is-invalid':form.errors.has('sale_rep')}">
                                    <option value="1"> Allowed</option>
                                    <option value="2">Not Allowed </option>
                                </select>
                                <has-error :form="form" field="sale_rep"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</template>
<script>

    import VForm from 'vform'
    import AlertError from "vform/src/components/AlertError";
    import HasError from "vform/src/components/HasError";
    export default {
        components: {HasError, AlertError},
        data() {
            return {
                form: new VForm({
                    name: '',
                    price: '',
                    quantity: '',
                    category: '',
                    sale_rep: '',
                })
            }
        },
        methods: {
            createproduct() {
                this.form.post('/product');
                Toast.fire({
                    type: 'success',
                    title: ' product created'
                })
            }
        }

    }

</script>