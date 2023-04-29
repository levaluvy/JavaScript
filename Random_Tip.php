<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Example</title>
        <!-- <link href="your_image" rel="icon"> -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            

            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <br><br>

                <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                            <!-- this start -->
                        <h2 class="mt-6 text-xl font-semibold text-gray-900">🩸 Refresh for Tips 🩸</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed" id="phrase">
                            
                        </p>
                            <!-- this end -->
                    </div>
                </div>
            </div>
        </div>

        <!-- this start -->
        <script>
            const phrases = [
                "An important tip is to ensure the consistency and accuracy of the data. Since the database will be used to manage multiple aspects of the restaurant's operations, it is crucial that the information stored is reliable and up-to-date.",
                "Keep your login credentials safe: Make sure you use strong passwords and don't share them with anyone. If possible, use two-factor authentication to further protect your credentials.",
                "Keep menu information up-to-date: Make sure you keep menu information up-to-date, including prices, ingredients, and options for food allergies. This can help avoid confusion or mistakes when taking customer orders.",
                "Track reservations: Use the platform to track customer reservations and occupied tables. This can help you avoid confusion and ensure that customers receive the right service.",
                "Be aware of data security: Keep customer information secure and private. Make sure you comply with data privacy laws and regulations, and don't share sensitive information with third parties without customer consent.",
            ];
  
            function displayRandomPhrase() {
                const phraseElement = document.getElementById("phrase");
                const randomIndex = Math.floor(Math.random() * phrases.length);
                phraseElement.textContent = phrases[randomIndex];
            }
            
            displayRandomPhrase();
        </script>
        <!-- this end -->

    </body>
</html>
