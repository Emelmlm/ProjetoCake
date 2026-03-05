document.addEventListener('DOMContentLoaded', () => {
    // Array de URLs de fotos com boa resolução para garantir o efeito fade/parallax (usando Unsplash placeholders).
    const photos = [
        "https://images.unsplash.com/photo-1518199266791-5375a83190b7?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1522673607200-164d1b6ce486?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1510627498534-bc260cd465cc?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1501901609772-df0848060b33?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1494774157365-9e04c6720e47?q=80&w=1200&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1474552226712-ac0f0961a954?q=80&w=1200&auto=format&fit=crop"
    ];

    const container = document.getElementById('slides');
    if (!container) return;

    let isHovered = false;
    const intervalTime = 3000; // Tempo entre giros (3 segundos)

    const autoScroll = () => {
        if (isHovered) return;

        const slides = container.querySelectorAll('.slide');
        if (slides.length < 2) return;

        const containerWidth = container.offsetWidth;
        const slideWidth = slides[0].offsetWidth;
        const gap = parseInt(getComputedStyle(slides[1]).marginLeft) || 0;
        const scrollStep = slideWidth + gap;

        // Calcula qual o slide atual baseado no scroll
        const currentIndex = Math.round(container.scrollLeft / scrollStep);
        let nextIndex = currentIndex + 1;

        if (nextIndex >= slides.length || container.scrollLeft + containerWidth >= container.scrollWidth - 10) {
            // Volta pro início
            container.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            // Vai para o próximo slide exato
            container.scrollTo({ left: nextIndex * scrollStep, behavior: 'smooth' });
        }
    };

    let scrollInterval = setInterval(autoScroll, intervalTime);

    container.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    container.addEventListener('mouseleave', () => {
        isHovered = false;
    });

    // Centralizando o carrossel na primeira foto na inicialização
    // Por conta do padding de 50vw, alinhar no inicio requer zerar o scroll (que é o natural)
});

// Polyfill minimalista para navegadores antigos movido para o index.html
