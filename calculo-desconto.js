document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('header');
  const headerHeight = header ? header.offsetHeight : 0;

  document.documentElement.style.setProperty('--header-height', headerHeight + 'px');

  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (!href || href === '#') return;
      const target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();

      const targetTop = target.getBoundingClientRect().top + window.pageYOffset;
      const scrollTo = targetTop - headerHeight - 8;

      window.scrollTo({ top: scrollTo, behavior: 'smooth' });

      history.pushState(null, '', href);
    });
  });

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        obs.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('section').forEach(sec => observer.observe(sec));
});


document.addEventListener("DOMContentLoaded", function () {
  const precoInput = document.getElementById("preco_inicial");
  const descontoInput = document.getElementById("desconto");
  const resultadoInput = document.getElementById("resultado");
  const form = document.getElementById("contact");

  // Impede o envio do formulário
  form.addEventListener("submit", function (e) {
    e.preventDefault();
  });

  function calcularDesconto() {
    const preco = parseFloat(precoInput.value.replace(",", "."));
    const desconto = parseFloat(descontoInput.value.replace(",", "."));

    if (isNaN(preco) || isNaN(desconto)) {
      resultadoInput.value = "";
      return;
    }

    const valorComDesconto = preco - (preco * desconto) / 100;
    resultadoInput.value = valorComDesconto.toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL",
    });
  }

  // Atualiza o resultado ao digitar
  precoInput.addEventListener("input", calcularDesconto);
  descontoInput.addEventListener("input", calcularDesconto);
});