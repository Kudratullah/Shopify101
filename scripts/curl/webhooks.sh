curl -X POST \
  -H "Content-Type: application/json" \
  -H "X-Shopify-Access-Token: shpua_70c07be2a8ba84524166232af22636cb" \
  -d '{
    "webhook": {
      "topic": "products/create",
      "address": "https://decent-externally-redfish.ngrok-free.app/api/product_created/",
      "format": "json"
    }
  }' \
  "https://dev1-0.myshopify.com/admin/api/2023-01/webhooks.json"

