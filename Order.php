<?php
// SMM Birla API details
$api_url = "https://smm-birla-panel.com/api/v2"; // actual API URL
$api_key = "0cd7b00b4900a29491ff3387e945e286";

// Form se data
$link = $_POST['link'];
$service = $_POST['service'];
$quantity = $_POST['quantity'];

$post = [
  "key" => $api_key,
  "action" => "add",
  "service" => $service,
  "link" => $link,
  "quantity" => $quantity
];

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if(isset($result['order'])){
  echo "✅ Order placed. Order ID: ".$result['order'];
}else{
  echo "❌ Order failed";
}                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Non Drop ✅</li>
                     <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Instant Start 🚀</li>
                </ul>
               <form action="order.php" method="POST" class="w-full">
  <input type="hidden" name="service" value="609"> <!-- SMM Birla Service ID -->
  <input type="hidden" name="quantity" value="150">
  <input type="hidden" name="service" value="451"> <!-- SMM Birla Service ID -->
  <input type="hidden" name="quantity" value="2000">

  <input
    type="url"
    name="link"
    placeholder="Instagram Post / Profile Link"
    required
    class="w-full mb-3 px-4 py-2 border rounded-lg"
  >

  <button type="submit"
    class="btn-primary text-white font-medium py-3 px-6 rounded-full w-full">
    Order Now
  </button>
</form>
            </div>

            <div class="package-card bg-gradient-to-br from-sky-100 to-white rounded-2xl p-10 shadow-lg border-2 border-blue-300 flex flex-col items-center transform scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">POPULAR</div>
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Premium Package</h3>
                <div class="text-3xl font-bold text-blue-600 mb-6">₹49</div>
                <ul class="text-blue-700 mb-8 space-y-3">
                   <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>5000+ Views 👀  ( Indian 🇮🇳 )</li>
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>250+ Likes ❤️ ( Indian 🇮🇳 )</li>
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>500+ Shares ◀️ ( Indian 🇮🇳 )</l
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Non Drop ✅</li>
                     <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Instant Start 🚀</li>
                </ul>
                <button class="btn-primary text-white font-medium py-3 px-6 rounded-full w-full"
                <a href="https://rzp.io/rzp/growviralinsta-sr49">Choose Package</a>
               </button>
            </div>

            <div class="package-card bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-md flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Exclusive Package</h3>
                <div class="text-3xl font-bold text-blue-600 mb-6">₹69</div>
                <ul class="text-blue-700 mb-8 space-y-3">
                     <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>8000+ Views 👀  ( Indian 🇮🇳 )</li>
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>400+ Likes ❤️ ( Indian 🇮🇳 )</li>
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>1000+ Shares ◀️ ( Indian 🇮🇳 )</l
                    <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Non Drop ✅</li>
                     <li class="flex items-center"><i data-feather="check" class="text-green-500 mr-2"></i>Instant Start 🚀</li>
                </ul>
                <button class="btn-primary text-white font-medium py-3 px-6 rounded-full w-full"
                <a href="https://rzp.io/rzp/growviralinsta-sr69">Choose Package</a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->


    <!-- Contact Section -->
   
    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-10 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <p class="mb-4">© Grow Viral Insta | <a href="#" class="hover:text-blue-300">Privacy Policy</a> | <a href="#" class="hover:text-blue-300">Terms</a></p>
            <div class="flex justify-center space-x-6">
                <a href="https://www.facebook.com/share/14HKWPJJ3iY/" class="hover:text-blue-300"><i data-feather="facebook"></i></a>
                <a href="https://www.instagram.com/growviral.insta?igsh=MXM1bWR3em1jaWk3Yg==" class="hover:text-blue-300"><i data-feather="instagram"></i></a>
                
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    <script>
        feather.replace();
    </script>
</body>
  </html>
  
