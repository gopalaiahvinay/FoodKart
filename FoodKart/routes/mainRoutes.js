// Home Route

Router.configure({
  layoutTemplate: 'basicLayout',
  notFoundTemplate: 'notFound',
  loadingTemplate: 'loading'
});

Router.route('/', {
  name: 'home',
  action: function () {
    this.render('home');
    SEO.set({ title: 'Home - Food Kart' });
  }
});
