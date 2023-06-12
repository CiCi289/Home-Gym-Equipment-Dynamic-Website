const cookieStorage = {
   getItem: (key) => {
      const cookies = document.cookie
                     .split(';')
                     .map(cookie => cookie.split('='))
                     .reduce((acc, [key, value]) => ({...acc, [key.trim()]: value }), {});
      return cookies[key];
   },
   setItem: (key,value) => {
      document.cookie = `${key}=${value}`;
   }
};


const storageType = cookieStorage;
const consentPropertyName = 'hge_consent';
const ShouldShowPopup = () => !storageType.getItem(consentPropertyName);
const SaveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
   const acceptFn = event => {
      SaveToStorage(storageType);
      CookiePopup.style.display='none';
   };
   const CookiePopup = document.getElementById('Cookie-popup');
   const AcceptCookie = document.getElementById('acceptcookie');
   AcceptCookie.addEventListener('click', acceptFn);

   if (ShouldShowPopup(storageType)) {
      setTimeout(() => {
         CookiePopup.style.display='block';
      }, 2000);
   }
};