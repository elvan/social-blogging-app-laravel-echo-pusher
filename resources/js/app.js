import './bootstrap';
import Chat from './chat';
import Search from './live-search';
import Profile from './profile';

if (document.querySelector('.profile-nav')) {
    new Profile();
}

if (document.querySelector('.header-search-icon')) {
    new Search();
}

if (document.querySelector('.header-chat-icon')) {
    new Chat();
}
