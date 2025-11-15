# StockPdpBundle

This bundle adds stock information to the OroCommerce Product Detail Page (PDP).



## 1. Setting Up OroCommerce with Docker & Symfony

### Quickstart

1. **Clone the OroCommerce repository:**
	```bash
	git clone -b 6.1.0 https://github.com/oroinc/orocommerce-application.git
	cd orocommerce-application
	```

2. **Copy environment files:**
	```bash
	cp .env-app .env-app.local
	```

3. **Start Docker containers:**
	```bash
	docker compose up -d
	```

4. **Install project dependencies:**
	```bash
	symfony composer install --prefer-dist
	```

5. **Install OroCommerce using Symfony CLI:**
	```bash
	symfony console oro:install -vvv --sample-data=y --application-url=https://127.0.0.1:8000 --language=en --formatting-code=en_US --user-name=admin --user-email=admin@example.com --user-firstname=Admin --user-lastname=User --user-password=admin --organization-name='AAXIS Test' --timeout=0 --env=dev -n
	```

6. **Access the application:**
	- Backoffice: https://127.0.0.1:8000/admin
	- Storefront: https://127.0.0.1:8000/

For advanced configuration, troubleshooting, or updating Docker Compose files, see the [official Docker & Symfony guide](https://doc.oroinc.com/backend/setup/dev-environment/docker-and-symfony/).


## 2. Installing StockPdpBundle

1. **Clone or copy the bundle** into `src`.
2. **Update Composer autoload:**
	```bash
	symfony composer dump-autoload
	```
3. **Clear the cache:**
	```bash
	symfony console cache:clear
	```
4. **(Optional) Warm up cache:**
	```bash
	symfony console cache:warmup
	```
5. **Check services:**
	Make sure the bundle's services are loaded
	```bash
	symfony console debug:container --parameter=kernel.bundles --format=json | grep AcmeStockPdpBundle
	```

## 3. Testing the Functionality

1. **Create a product with stock** in the OroCommerce admin panel.
2. **Go to the storefront** and open the Product Detail Page (PDP) for your product.
3. **Verify stock info** is displayed as expected.

---
## 4. Example Result

Below is an example of how the stock information appears on the PDP:
<img width="1916" height="905" alt="Captura de imagem_20251114_231648" src="https://github.com/user-attachments/assets/367b09b4-c634-4309-8b7c-0acd3d082fc6" />
