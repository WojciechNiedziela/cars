<template>
    <div>
        <input type="text" v-model="vin" @input="filterCars(vin)">
        <table>
            <thead>
                <tr>
                    <th>Vin</th>
                    <th>Cena</th>
                    <th>Opis</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Usuń samochód</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="car in cars" :key="car.id">
                    <td>
                        {{ car.vin }}
                    </td>
                    <td>
                        {{ car.price }}
                    </td>
                    <td>
                        {{ car.description }}
                    </td>
                    <td v-if="car.brand">
                        {{ car.brand.name }}
                    </td>
                    <td v-else>-------</td>
                    <td>
                        {{ car.model.name }}
                    </td>
                    <td>
                        <button @click="destroy(car.id)">
                            Usuń
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import { thisTypeAnnotation } from '@babel/types'

export default {
    data() {
        return {
            cars: [],
            vin: ""
        }
    },
    methods: {
        async getCars(vin = "") {
            await this.$http.get('/main-api/cars/list?vin=' + vin)
                .then(response => {
                    this.cars = response.data.cars
                })
        },
        async destroy(id) {
            await this.$http.delete('main-api/cars/destroy/' + id)
                .then(response => {
                    console.log(response.data.cars)
                })
            this.getCars()
        },
        filterCars(vin) {
            if (vin.length > 3) {
                this.getCars(vin)
            }
            else if (vin.length == 3 || vin.length == 0) {
                this.getCars("")
            }
        }
    },
    created() {
        this.getCars()
    }
}
</script>