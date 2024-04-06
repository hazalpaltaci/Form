  function checkInputs() {
    const textInputs = document.querySelectorAll('input[type="text"]');
    const radioInputs = document.querySelectorAll('input[type="radio"]');
    let isEmpty = false;
    textInputs.forEach(input => {
      if (input.value.trim() === '') {
        isEmpty = true;
      }
    });
    radioInputs.forEach(input => {
      const name = input.getAttribute('name');
      const checkedRadios = document.querySelectorAll(`input[type="radio"][name="${name}"]:checked`);
      
      if (checkedRadios.length === 0) {
        isEmpty = true;
      }
    });

    if (isEmpty) {
      alert('Lütfen tüm alanları doldurun.');
    }
  }
  document.getElementById('gonder').addEventListener('click', checkInputs)