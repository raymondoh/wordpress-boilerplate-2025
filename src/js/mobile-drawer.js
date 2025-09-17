const TRANSITION_DURATION = 300;

const prepareMenuItems = (nav) => {
  const items = Array.from(nav.querySelectorAll('.mobile-stagger, .menu-item'));

  items.forEach((item) => {
    item.classList.add('mobile-stagger', 'opacity-0', '-translate-x-4', 'transition-all', 'duration-300');
    item.classList.remove('opacity-100', 'translate-x-0');
    item.style.transitionDelay = '';
  });

  return items;
};

const toggleIcons = (openIcon, closeIcon, isOpen) => {
  if (!openIcon || !closeIcon) {
    return;
  }

  openIcon.classList.toggle('hidden', isOpen);
  closeIcon.classList.toggle('hidden', !isOpen);
};

const applyStagger = (items, isOpen) => {
  items.forEach((item, index) => {
    item.style.transitionDelay = isOpen ? `${index * 60}ms` : '';
    item.classList.toggle('opacity-0', !isOpen);
    item.classList.toggle('opacity-100', isOpen);
    item.classList.toggle('-translate-x-4', !isOpen);
    item.classList.toggle('translate-x-0', isOpen);
  });
};

const lockBodyScroll = (isOpen) => {
  document.body.classList.toggle('overflow-hidden', isOpen);
};

export const initMobileNavDrawer = () => {
  const toggle = document.getElementById('mobile-nav-toggle');
  const nav = document.getElementById('mobile-nav');
  const backdrop = document.getElementById('mobile-backdrop');

  if (!toggle || !nav || !backdrop) {
    return;
  }

  const openIcon = document.getElementById('icon-open');
  const closeIcon = document.getElementById('icon-close');
  const menuItems = prepareMenuItems(nav);

  let isOpen = false;
  let closeTimeout = null;

  const setState = (open) => {
    if (isOpen === open) {
      return;
    }

    isOpen = open;
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    nav.setAttribute('aria-hidden', open ? 'false' : 'true');

    if (open) {
      backdrop.hidden = false;
    }

    nav.classList.toggle('translate-x-full', !open);
    nav.classList.toggle('translate-x-0', open);
    nav.classList.toggle('opacity-0', !open);
    nav.classList.toggle('opacity-100', open);
    nav.classList.toggle('pointer-events-none', !open);
    nav.classList.toggle('pointer-events-auto', open);

    backdrop.classList.toggle('opacity-0', !open);
    backdrop.classList.toggle('opacity-100', open);
    backdrop.classList.toggle('pointer-events-none', !open);
    backdrop.classList.toggle('pointer-events-auto', open);

    applyStagger(menuItems, open);
    toggleIcons(openIcon, closeIcon, open);
    lockBodyScroll(open);

    if (!open) {
      if (closeTimeout) {
        window.clearTimeout(closeTimeout);
      }

      closeTimeout = window.setTimeout(() => {
        backdrop.hidden = true;
        closeTimeout = null;
      }, TRANSITION_DURATION);
    }
  };

  toggle.addEventListener('click', () => {
    setState(!isOpen);
  });

  backdrop.addEventListener('click', () => {
    setState(false);
  });

  nav.addEventListener('click', (event) => {
    const link = event.target instanceof HTMLElement ? event.target.closest('a') : null;
    if (link) {
      setState(false);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && isOpen) {
      setState(false);
    }
  });
};
