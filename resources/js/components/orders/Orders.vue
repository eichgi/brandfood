<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa fa-paper-plane"></i> Listado de ordenes</h2>
                        <table class="table table-bordered" style="overflow-x: auto;">
                            <thead>
                            <tr>
                                <th>Orden ID</th>
                                <th>Producto</th>
                                <td>Fecha</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="order in orders" :key="order.id">
                                <td>{{order.id}}</td>
                                <td>{{order.products.join(',')}}</td>
                                <td>{{order.created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Swal from 'sweetalert2';

    export default {
        name: "Orders",
        data() {
            return {
                orders: [],
                cart: [],
            }
        },
        mounted() {
            this.getOrders();
        },
        methods: {
            async getOrders() {
                try {
                    const response = await axios.get('/api/orders');
                    this.orders = response.data.orders.map(order => {
                        const {id, created_at} = order;
                        return {
                            id,
                            products: order.products.map(product => {
                                return `${product.name} x${product.pivot.quantity}`;
                            }),
                            created_at,
                        }
                    });
                } catch (error) {
                    console.log(error);
                    Swal.fire({
                        title: 'Error',
                        icon: 'error',
                        text: 'No se pueden cargar los productos',
                    });
                }
            },
        }
    }
</script>

<style scoped>

</style>
