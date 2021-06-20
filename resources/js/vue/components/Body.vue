<template>
    <div class="c-body">
        <div class="c-body__navbar">
            <div class="c-body__category">
                <a class="active" href="">Category1</a>
                <a class="active" href="">Category2</a>
            </div>
            <div class="c-body__search">
                <input type="text" placeholder="Search..">
                <button>Search</button>
            </div>
        </div>

        <div class="c-body__body">
            <div
                class="c-body__content"
                v-for="news in newsData"
            >
                <h3>{{ news.title }}</h3>
                <div class="text">
                    <img :src="news.image_url">
                    <p>{{ news.description }}</p>
                    <p>{{ news.content }}</p>
                </div>
                <div class="c-body__author">
                    <strong>Author: <span>{{ news.author }}</span></strong>
                </div>
                <div class="c-body__source">
                    <strong>Source: <span>{{ news.source.name }}</span></strong>
                </div>
                <div class="c-body__published-at">
                    <strong>Published At: <span>{{ news.published_at }}</span></strong>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Body',

    props: {
        newsData: {
            required: true
        }
    }
}
</script>

<style lang="scss">
.c-body {
    padding: 1rem 7rem;

    &__author {
        span {
            color: deepskyblue;
        }
    }

    &__published-at {
        span {
            color: cornflowerblue;
        }
    }

    &__source {
        span {
            color: cadetblue;
        }
    }

    &__content {
        padding-bottom: 0.5rem;
        border-bottom: 1px solid lightgray;

        .text {
        }
    }

    &__navbar {
        display: flex;
        justify-content: space-between;
        padding: 1rem 7rem;
        overflow: hidden;
        background-color: #e9e9e9;

        a {
            color: black;
            text-decoration: none;
            padding-right: 0.5rem;
        }
    }

    &__search {
        button {
            padding: 0.2rem 2rem;
            border-radius: 0.5rem;
            border: 1px solid;
        }
        input {
            width: auto;
            height: 1.5rem;
            border-radius: 0.5rem;
            border: none;
        }
    }

    h3 {
        text-align: center;
        color: dodgerblue;
    }

    img {
        display: block;
        margin: 0 auto;
        width: 30%;
    }
}
</style>
