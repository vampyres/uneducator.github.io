const authenticated = localStorage.getItem('banned');
if (authenticated) {
  window.location.href = '/ban.html';
}
