document.querySelector('.nav-back').addEventListener('click', () => {
        if (history.length > 1) history.back();
    });