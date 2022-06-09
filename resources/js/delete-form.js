    const deleteForm = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', (e) =>{
            e.preventDefault();
            const confirmation =confirm('Are you sure you want to delete this form?');
            if(confirmation) e.target.submit();
        })
    });
