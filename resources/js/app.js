import './bootstrap';
import Chat from './chat';
import Search from './live-search';

if (document.querySelector('.header-search-icon')) {
    new Search();
}

if (document.querySelector('.header-chat-icon')) {
    new Chat();
}
