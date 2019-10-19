(function scroll() {
  let backToTop = document.querySelector(".back-to-top");
  
  function getScrollRemaining() {
    let rootNode = document.documentElement,
      body = document.body,
      st = 'scrollTop',
      sh = 'scrollHeight';

    return ( (rootNode[sh] || body[sh]) - rootNode.clientHeight - (rootNode[st] || body[st]) )
  }

  window.addEventListener('scroll', (e) => {
    if (getScrollRemaining() < 60) {
      backToTop.style.display = 'block';
    } else {
      backToTop.style.display = 'none';
    }
  });
})();