<template>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa fa-cutlery"></i> Listado de productos</h2>
                        <table class="table table-bordered" style="overflow-x: auto;">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="product in products" :key="product.id">
                                <td><img class="img-responsive" style="width: 100px"
                                         :src="product.image_url"
                                         alt=""></td>
                                <td v-text="product.name"></td>
                                <td v-text="product.description"></td>
                                <td>
                                    <button class="btn btn-primary" @click="addToCart(product)">Agregar</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa fa-shopping-bag"></i> Carrito</h2>
                        <table class="table table-bordered" style="overflow-x: auto;">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="product in cart" :key="product.id">
                                <td v-text="product.name"></td>
                                <td><input type="number" min="1" step="1" class="form-control"
                                           v-model="product.quantity"></td>
                                <td>
                                    <button class="btn btn-danger" @click="removeProductFromCart(product)">Quitar
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="cart.length === 0">
                                <td colspan="3" class="text-center">Agrega productos a tu carrito</td>
                            </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-success btn-block" :disabled="cart.length === 0" @click="createOrder">
                            Realizar Pedido
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Menu",
        data() {
            return {
                products: [],
                cart: [],
            }
        },
        mounted() {
            this.getProducts();
        },
        methods: {
            async getProducts() {
                const products = await axios.get('/api/products');
                this.products = products.data;
            },
            addToCart(newProduct) {
                const foundInCart = this.cart.filter(product => newProduct.id === product.id);
                if (foundInCart.length) {
                    this.cart = this.cart.map(product => {
                        if (product.id === newProduct.id) {
                            const copy = product;
                            copy.quantity = product.quantity + 1;
                            return copy;
                        }
                        return product;
                    });
                } else {
                    this.cart.push({...newProduct, quantity: 1});
                }
            },
            removeProductFromCart(product) {
                this.cart = this.cart.filter(item => item.id !== product.id);
            },
            async createOrder() {
                try {
                    const order = await axios.post('/api/orders', {products: this.cart});
                    console.log(order);
                } catch (error) {
                    console.log(error.response);
                }
            }
        }
    }
</script>

<style scoped>

</style>
