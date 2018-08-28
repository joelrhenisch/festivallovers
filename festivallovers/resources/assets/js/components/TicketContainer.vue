<template>
    <div class="ticketContainer">
        <div class="ticketGreen">
            <img src="icons/tickets_standard_white.svg"  height="60px" alt="ticket">
            <p class="title">{{ name }}</p>
            <p class="price">CHF 75.–</p>
        </div>

        <div class="ticketsArea">
            <div class="area-container nomargin">
                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketContainer nomargin">
                    <div class="ticketsCounter">
                        <div class="container">
                            <button class="box" @click="removeTicket()">
                                <img src="icons/steuerung_minus.svg"  width="20px" alt="ticket minus">
                            </button>
                            <p class="fontticket">{{ this.ticketCount }} Tickets</p>
                            <button class="box" @click="addTicket()">
                                <img src="icons/steuerung_plus.svg"  width="20px" alt="ticket plus">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            name
        },

        data() {
            return {
                ticketCount: 0,
            }
        },

        methods: {
            addTicket() {
                this.ticketCount++;
                Event.$emit('ticketPlus');
            },

            removeTicket() {
                if (this.ticketCount > 0) {
                    this.ticketCount--;
                    Event.$emit('ticketMinus');
                }
            },
        },
    }
</script>