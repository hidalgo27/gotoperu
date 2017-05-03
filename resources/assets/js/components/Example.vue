<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!

                        {{message}}

                        <span v-bind:title="message2">
                            Hover your mouse over me for a few seconds
                            to see my dynamically bound title!
                          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                message: 'Hello Vue!',
                message2: 'You loaded this page on ' + new Date()
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
