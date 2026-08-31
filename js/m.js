$(document).ready(function() {
    if ($('.slick_slider').length) {
        $('.slick_slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
            cssEase: 'linear'
        });
    }

    initCubos3D();
});

function initCubos3D() {
    if (typeof THREE === 'undefined') {
        console.error('Three.js não foi encontrado.');
        return;
    }

    // Detecta tela pequena
    const isMobile = window.innerWidth < 768;
    const cubeCount = isMobile ? 50 : 150;

    // 1. Cena e Câmera
    const scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(0x050505, 0.025);

    const camera = new THREE.PerspectiveCamera(
        60,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );
    camera.position.set(0, 0, 35);

    // 2. Renderizador
    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Ativa sombras apenas no Desktop
    if (!isMobile) {
        renderer.shadowMap.enabled = true;
        renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    }

    document.body.appendChild(renderer.domElement);

    // 3. Luzes
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambientLight);

    const mainLight = new THREE.DirectionalLight(0xffffff, 1.8);
    mainLight.position.set(20, 30, 20);
    
    if (!isMobile) {
        mainLight.castShadow = true;
        mainLight.shadow.mapSize.width = 1024;
        mainLight.shadow.mapSize.height = 1024;
    }
    scene.add(mainLight);

    const fillLight = new THREE.DirectionalLight(0x335577, 0.8);
    fillLight.position.set(-20, -10, -10);
    scene.add(fillLight);

    // 4. Cubos
    const cubes = [];
    const geometry = new THREE.BoxGeometry(1.6, 1.6, 1.6);

    for (let i = 0; i < cubeCount; i++) {
        const grayTone = Math.random() * 0.3 + 0.2;

        const material = new THREE.MeshStandardMaterial({
            color: new THREE.Color(grayTone, grayTone, grayTone),
            roughness: 0.3,
            metalness: 0.5
        });

        const cube = new THREE.Mesh(geometry, material);

        if (!isMobile) {
            cube.castShadow = true;
            cube.receiveShadow = true;
        }

        cube.position.x = (Math.random() - 0.5) * 65;
        cube.position.y = (Math.random() - 0.5) * 65;
        cube.position.z = (Math.random() - 0.5) * 35;

        const scale = Math.random() * 1.6 + 0.5;
        cube.scale.set(scale, scale, scale);

        cube.userData = {
            rotX: (Math.random() - 0.5) * 0.012,
            rotY: (Math.random() - 0.5) * 0.012,
            speedY: Math.random() * 0.025 + 0.008
        };

        cubes.push(cube);
        scene.add(cube);
    }

    // 5. Loop de Animação
    function animate() {
        requestAnimationFrame(animate);

        cubes.forEach(cube => {
            cube.rotation.x += cube.userData.rotX;
            cube.rotation.y += cube.userData.rotY;
            cube.position.y += cube.userData.speedY;

            if (cube.position.y > 30) {
                cube.position.y = -30;
                cube.position.x = (Math.random() - 0.5) * 65;
            }
        });

        renderer.render(scene, camera);
    }

    animate();

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}