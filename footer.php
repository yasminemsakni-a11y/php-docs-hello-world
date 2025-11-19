    </div>
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p>&copy; 2023 Azure Mini App - Déployée avec Azure for Students. <i class="bi bi-shield-check"></i></p>
            <div>
                <a href="#" class="text-white me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle thème sombre/clair
        const toggle = document.getElementById('theme-toggle');
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggle.innerHTML = document.body.classList.contains('dark-mode') ? '<i class="bi bi-sun"></i> Thème' : '<i class="bi bi-moon"></i> Thème';
        });
    </script>
</body>
</html>