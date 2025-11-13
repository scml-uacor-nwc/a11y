  // use device preferences

  function useDevicePreferences(e) {
    localStorage.getItem('useDevicePreferences');
    if (!useDevicePreferences || useDevicePreferences == 'false') {
      localStorage.setItem('useDevicePreferences', 'true');
      select('body').classList.toggle('reducedMotion');
    } else {
      localStorage.setItem('useDevicePreferences', 'false');
      select('body').classList.toggle('reducedMotion');
    }
  }
  document.querySelector('.highContrast').addEventListener('click', highContrast, false);

  function highContrast(e) {
    localStorage.getItem('highContrast');
    if(!useHighContrast || useHighContrast == 'false'){
      localStorage.setItem('useHighContrast', 'true');
      select('*').classList.toggle('highContrast');
      select('header').classList.toggle('highContrast');
      select('section').classList.toggle('highContrast');
    } else {
      localStorage.setItem('useHighContrast', 'false');
      select('*').classList.toggle('highContrast');
      select('header').classList.toggle('highContrast');
      select('section').classList.toggle('highContrast');
    }
  }
  document.querySelector('.useDevicePreferences').addEventListener('click', useDevicePreferences, false);

  function toggleAnimation(e) {
    console.log('useAnimation - from plugin');
      localStorage.getItem('useAnimation');
      if(!useAnimation || useAnimation == 'false'){
        localStorage.setItem('useAnimation', 'true');
        select('.hero-img').classList.toggle('zIndex-2');
        select('.hero-waves').classList.toggle('hidden-true');
        select('.animated').classList.toggle('paused');
      } else {
        localStorage.setItem('useAnimation', 'false');
        select('.hero-img').classList.toggle('zIndex-2');
        select('.hero-waves').classList.toggle('hidden-true');
        select('.animated').classList.toggle('paused');
      }
  }
  document.querySelector('.useAnimation').addEventListener('click', toggleAnimation, false);