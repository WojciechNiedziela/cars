<template>
    <div>
        <div>
            <h1>Uzytkownik</h1>
            <b>{{ name }} {{ surename }}</b>
            <br>
            <b>Iq:</b>{{ iq }}
        </div>
        <div>
            <label for="name">Imię</label>
            <input type="text" name="name" id="name" v-model="name">
            <label for="surename">Nazwisko</label>
            <input type="text" name="surename" id="surename" v-model="surename">
        </div>
        <div>
            <button @click="increaseIq()">Zwiększ Iq</button>
            <button @click="decreaseIq()">Zmniejsz Iq</button>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            name: "",
            surename: "",
            iq: 0
        }
    },
    methods: {
        increaseIq() {
            this.iq++;
        },
        decreaseIq() {
            this.iq--;
        },
    }
}
</script>