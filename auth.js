const authenticated = localStorage.getItem('banned');
if (authenticated) {
  window.location.href = '/premium/ban.html';
}
