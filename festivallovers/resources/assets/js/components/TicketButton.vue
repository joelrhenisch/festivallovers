<template>
    <button id="go-to-payment" class="box-sm-full-width action__box--black w-100">
        {{ ticketCount }} TICKETS KAUFEN
        <a href="/payment"></a>
    </button>
</template>

<script>
    export default {
        data() {
            return {
                ticketCount: 0,
            }
        },

        created() {
            Event.$on('ticketPlus', () => {
                this.ticketCount += 1;
            })

            Event.$on('ticketMinus', () => {
                this.ticketCount -= 1;
            })
        }
    }
</script>
