<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Request</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="box-title">
                <input type="text" v-model="search" placeholder="Search" class="form-control-sm" style="width:100%;">
                </div>
                <ul class="list-group">
                    <li class="list-group-item " v-for="(temp , index) in filteredreques">
                        {{temp.user_id}}
                        <span class="float-right">
            <button class="btn" @click="movetoapp(index)"><i class="fa fa-check"></i></button>
            </span>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Approved</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="list-group-item " v-for="(temp , index) in approved">
                        {{temp.user_id}}
                        <span class="float-right">
            <button class="btn"><i class="fa fa-check"></i></button>
            </span>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                reques: [],
                approved:[],
                newrequest: '',
                search:''
            }
        },
        methods: {
            addrequest() {
                this.reques.push(this.newrequest);
                this.newrequest = ''
            },
            movetoapp(index){
                this.approved.push(this.reques[index]);
                this.reques.splice(index, 1);

            }
        },
        computed:{
            filteredreques: function () {
               return this.reques.filter((temp) => {
                    return temp.user_id.match(this.search.filter)
                });
            }
        },
        created() {
            axios.get('/request-list')
                .then(({data}) => this.reques = data)
        }
    }

</script>