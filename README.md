# StockPdpBundle

This bundle adds stock information to the OroCommerce Product Detail Page (PDP).

---

## 1. Setting Up OroCommerce Locally

To get started, follow the official OroCommerce installation guide:

- [OroCommerce Installation Docs](https://doc.oroinc.com/backend/setup/dev-environment/)

Make sure your environment meets all requirements (PHP, Composer, etc.) before proceeding.

---

## 2. Installing StockPdpBundle

1. **Clone or copy the bundle** into `src`.
2. **Update Composer autoload:**
	```bash
	composer dump-autoload
	```
3. **Clear the cache:**
	```bash
	php bin/console cache:clear
	```
4. **(Optional) Warm up cache:**
	```bash
	php bin/console cache:warmup
	```
5. **Check services:**
	Make sure the bundle's services are loaded
    ```bash
    symfony console debug:container --parameter=kernel.bundles --format=json | grep AcmeStockPdpBundle
    ```

---

## 3. Testing the Functionality

1. **Create a product with stock** in the OroCommerce admin panel.
2. **Go to the storefront** and open the Product Detail Page (PDP) for your product.
3. **Verify stock info** is displayed as expected.

---
## 4. Example Result

Below is an example of how the stock information appears on the PDP:
<img width="1916" height="905" alt="Captura de imagem_20251114_231648" src="https://github.com/user-attachments/assets/367b09b4-c634-4309-8b7c-0acd3d082fc6" />
