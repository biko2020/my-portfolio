document.addEventListener('DOMContentLoaded', function() {
    const testimonialForm = document.getElementById('testimonial-form');
    
    if (testimonialForm) {
        testimonialForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(testimonialForm);
            
            fetch('/includes/add_testimonial.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Testimonial submitted successfully!');
                    testimonialForm.reset();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while submitting the testimonial.');
            });
        });
    }


        const testimonialTextarea = document.getElementById('testimonial');
        const characterCount = document.querySelector('.character-count');

        testimonialTextarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            characterCount.textContent = `${currentLength} / 200 characters`;
            
            if (currentLength > 200) {
                characterCount.style.color = 'red';
            } else {
                characterCount.style.color = 'inherit';
            }
        });

});