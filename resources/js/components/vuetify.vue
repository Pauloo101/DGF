<template>
    <v-app id="inspire" light>
        <v-navigation-drawer
                v-model="drawer"
                clipped
                fixed
                app
        >
            <v-list dense>                                
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon>fab fa-product-hunt</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <router-link :to="{name:'product'}" tag="v-list-tile-title">
                            product
                        </router-link>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon>settings</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Settings</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar app fixed clipped-left>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>Home</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <v-btn flat>Username</v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <v-content>
            <div style="padding: 30px">
                <router-view></router-view>
            </div>
        </v-content>
        <v-footer app fixed>
            <span>&copy; 2019</span>
        </v-footer>
    </v-app>
</template>


<script>
    export default {
        data: () => ({
            drawer: null
        }),
        props: {
            source: String
        }
    }
</script>
