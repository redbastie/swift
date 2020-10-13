try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {
    console.log(e);
}

require('bs4-toast');

$.toastDefaults = {
    position: 'top-right',
    dismissible: true,
    stackable: false,
    pauseDelayOnHover: true,
    style: {toast: '', info: '', success: '', warning: '', error: ''}
};

Livewire.on('toastSuccess', (message) => {
    $.toast({
        type: 'success',
        title: 'Success',
        content: message,
        delay: 3000,
    });
});

Livewire.on('toastError', (message) => {
    $.toast({
        type: 'error',
        title: 'Error',
        content: message,
        delay: 3000,
    });
});

Livewire.on('showModal', (id) => {
    $('#' + id).modal('show');
});

Livewire.on('hideModal', (id) => {
    $('#' + id).modal('hide');
});
