import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/components/Login'
import ContactList from '@/components/ContactList'
import Contact from '@/components/Contact'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    },
	{
		path: '/contacts',
		name: 'ContactList',
		component: ContactList
	},
	{
		path: '/add-contact',
		name: 'Contact',
		component: Contact
	}
  ]
})
