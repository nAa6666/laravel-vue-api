<template>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap">
                <h1 class="m-0">News</h1>
            </div>

            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div class="col-md-4" v-for="post in news.data">
                        <p>{{ post.published_at }}</p>
                        <h3>{{ post.title }}</h3>
                        <p>{{ post.content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            news: [],
        };
    },
    async mounted() {
        const response = await fetch('https://vue-news.test/api/news');
        this.news = await response.json();
        console.log(this.news.data)
    },
};
</script>
