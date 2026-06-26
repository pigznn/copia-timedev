
// ================================================
// ESPECIALISTAS - Animação Slick no Mouse Hover
// ================================================
document.addEventListener('DOMContentLoaded', function() {
    const especialistas = document.querySelectorAll('.especialistas');

    especialistas.forEach((card, index) => {
        const photoImg = card.querySelector('.especialistas-photo img');
        
        if (!photoImg) return;

        let rotationY = 0;
        let rotationX = 0;
        let isAnimating = false;

        card.addEventListener('mouseenter', function() {
            isAnimating = true;
            let frame = 0;
            const frames = 20; // Número de frames da animação

            const animate = () => {
                frame++;
                
                // Rotação suave em Y (inclinação horizontal)
                rotationY = Math.sin((frame / frames) * Math.PI * 2) * 8;
                
                // Rotação suave em X (inclinação vertical)
                rotationX = Math.sin((frame / frames) * Math.PI * 2 + Math.PI / 2) * 6;

                photoImg.style.transform = `
                    perspective(1000px)
                    rotateX(${rotationX}deg)
                    rotateY(${rotationY}deg)
                    scale(1.05)
                `;

                if (frame < frames && isAnimating) {
                    requestAnimationFrame(animate);
                }
            };

            animate();
        });

        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;
            
            const distX = (mouseX - centerX) / centerX;
            const distY = (mouseY - centerY) / centerY;
            
            rotationY = distX * 15;
            rotationX = -distY * 12;

            photoImg.style.transform = `
                perspective(1000px)
                rotateX(${rotationX}deg)
                rotateY(${rotationY}deg)
                scale(1.05)
            `;
        });

        card.addEventListener('mouseleave', function() {
            isAnimating = false;
            
            // Retornar suavemente à posição original
            photoImg.style.transition = 'transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
            photoImg.style.transform = `
                perspective(1000px)
                rotateX(0deg)
                rotateY(0deg)
                scale(1)
            `;

            setTimeout(() => {
                photoImg.style.transition = 'transform 0.05s linear';
            }, 600);
        });
    });
});

// FAQ Acordeão Funcionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            // Fechar outros itens (apenas um aberto por vez)
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });

            // Toggle do item atual
            item.classList.toggle('active');
        });
    });
});
