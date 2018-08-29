<template>
    <div class="d-flex">
        <li id="asd">
            {{selectedPerson}}
            <img src="icons/steuerung_dropdown_kreise_grey.svg" height="18px" alt="arrow down">
        </li>
        <div>
            <select class="pfadleiste__dropdown-custom dropdown-toggle" v-model="selectedPerson">
                <option v-for="person in people" :value="person.name">{{person.name}}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                people: [
                    {name: 'Sur le Lac1'},
                    {name: 'Rock am See2'},
                    {name: 'Greenfield3'}
                ],
                selectedPerson: 'Wähle dein Event',
            };
        }
    }
</script>
