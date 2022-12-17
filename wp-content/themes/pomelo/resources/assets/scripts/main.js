// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import about from './routes/about';
import contact from './routes/contact';
import blog from './routes/blog';
import category from './routes/category';
import tag from './routes/tag';
import singlePost from './routes/postTemplateDefault';



/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  about,
  contact,
  blog,
  category,
  tag,
  singlePost,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
