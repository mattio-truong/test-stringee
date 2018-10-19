<template>
    <div id="app">
        <div id="header-nav" class="nav-bars">
            <h1>Wellcome to Stringee</h1>
        </div>
        <router-view/>
        <div id="footer-nav" class="nav-bars">
            Test stringee - Ty Truong
        </div>
    </div>
</template>

<script>
    export default {
        name: 'App',
        data () {
            return; 
        }
    }
</script>

<style lang="scss">
	body{padding:20px;}
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
		margin: 80px 0px 40px;
        .nav-bars{
			background-color: #ea4335;
            position: fixed;
            width: 100%;
            padding: 10px;
            color: #fff;
			font-weight: inherit;

            a {
                color: white;
                text-decoration: none;
            }
        }

        #header-nav {
            top: 0;
            left: 0;
        }

        #footer-nav {
            bottom: 0;
            left: 0;
        }
		ul.errors {
			margin-left: 0px;
			text-align: left;
			padding-left: 20px;
				color: red
		}
    }
</style>