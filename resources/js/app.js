import './bootstrap';

import { initAnimations } from './modules/animations';
import { initMenu } from './modules/menu';
import { initPrivacyModal } from './modules/privacyModal';

document.addEventListener("DOMContentLoaded", () => {

    initMenu();
    initPrivacyModal();
    initAnimations();

});