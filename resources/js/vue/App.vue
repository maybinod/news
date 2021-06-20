<template>
    <div class="c-news">
        <Header />

        <Body :newsData="newsData" />

        <Footer />
    </div>
</template>

<script>
import Body from './components/Body'
import Footer from './components/Footer'
import Header from './components/Header'

export default {
    created () {
        axios.get('/news').then(response => {
            this.newsData = response.data
        })
    },

    components: {
        Body,
        Footer,
        Header
    },

    data () {
        return {
            newsData: null
        }
    },

    name: 'Home'
}
</script>
