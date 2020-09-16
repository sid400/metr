window.Vue = require('vue');

const metr = new Vue({
    el: '#metr',
    data: {
        portfolio: {
            selectedGroup: 0,
            filteredProduct: null,
            groups: {
                0: 'Все проекты',
                1: 'Спальня',
                2: 'Кухня',
                3: 'Гостиная',
                4: 'Кабинет',
            },
            simulateDB: {
                1: {
                    photoName: 'Living room 1',
                    photoRoot: '4.1',
                    groupNumber: 3,
                },
                2: {
                    photoName: 'Bedroom 1',
                    photoRoot: '4.2',
                    groupNumber: 1,
                },
                3: {
                    photoName: 'Kitchen 1',
                    photoRoot: '4.3',
                    groupNumber: 2,
                },
                4: {
                    photoName: 'Kitchen 2',
                    photoRoot: '4.4',
                    groupNumber: 2,
                },
                5: {
                    photoName: 'Living room 2',
                    photoRoot: '4.5',
                    groupNumber: 3,
                },
                6: {
                    photoName: 'Bedroom 2',
                    photoRoot: '4.6',
                    groupNumber: 1,
                },
                7: {
                    photoName: 'Living room 3',
                    photoRoot: '4.7',
                    groupNumber: 3,
                },
                8: {
                    photoName: 'Living room 4',
                    photoRoot: '4.8',
                    groupNumber: 3,
                },
                9: {
                    photoName: 'Kitchen 3',
                    photoRoot: '4.9',
                    groupNumber: 2,
                },
                10: {
                    photoName: 'Living room 5',
                    photoRoot: '4.10',
                    groupNumber: 3,
                },
                11: {
                    photoName: 'Kitchen 4',
                    photoRoot: '4.11',
                    groupNumber: 2,
                },
            }

        }
    },
    methods: {
        filterProduct(){
            if (this.portfolio.selectedGroup === 0){
                this.portfolio.filteredProduct = this.portfolio.simulateDB;
            }
            else{
                this.portfolio.filteredProduct = {};
                for (let element in this.portfolio.simulateDB){
                    if (this.portfolio.selectedGroup === this.portfolio.simulateDB[element].groupNumber )
                    this.portfolio.filteredProduct[element] = this.portfolio.simulateDB[element];
                }
            }
        }

    },
    mounted() {
        this.filterProduct()
    },
});
