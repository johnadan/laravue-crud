<template>
  <div id="app">
    <div class="heading">
      <h1>Products</h1>
    </div>
    <product-component
      v-for="product in products"
      v-bind="product"
      :key="product.id"
      @update="update"
      @delete="del"
    ></product-component>
    <div>
      <button @click="create">Add</button>
    </div>
  </div>
</template>

<script>
  function Product({ id, name, category, description}) {
    this.id = id;
    this.name = name;
    this.category = category;
    this.description = description;
  }

  //import ProductComponent from './components/ProductComponent.vue';
import ProductComponent from './ProductComponent.vue';

  export default {
    data() {
      return {
        products: []
      }
    },
    methods: {
      async create() {
        // To do
      },
      async read() {
        // To do
        const { data } = window.axios.get('/api/products');
        data.forEach(product => this.products.push(new Product(product)));
    // console.log(data)
      },
      async update(id, name, category, description) {
        // To do
        await window.axios.put(`/api/products/${id}`, { color });
    // Once AJAX resolves we can update the product with the new color
    this.products.find(product => product.id === id).name = name;
    this.products.find(product => product.id === id).category = category;
    this.products.find(product => product.id === id).description = description;
      },
      async del(id) {
        // To do
      }
    },
    created() {
    this.read();
    },
    components: {
      ProductComponent
    }
  }
</script>