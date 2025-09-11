# React + Vite Frontend Setup

This directory contains the React SPA scaffolded using Vite. It will be used to migrate the existing HTML/CSS template into React components, reuse the current CSS, and set up React Router for navigation.

## Next Steps
- Migrate Blade/static HTML into React components
- Copy and reuse `style.css` from the Laravel assets
- Set up React Router for SPA navigation
- Prepare for REST API integration with Laravel backend

## SPA Routes (planned)
- Home
- Shop
- Product
- Cart
- Wishlist
- Profile

## API Integration
- Placeholder for REST API endpoints to be defined

## Development
Run the app:

```sh
npm run dev
```

---
This README will be updated as migration progresses.

Currently, two official plugins are available:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react) uses [Babel](https://babeljs.io/) for Fast Refresh
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react-swc) uses [SWC](https://swc.rs/) for Fast Refresh

## Expanding the ESLint configuration

If you are developing a production application, we recommend using TypeScript with type-aware lint rules enabled. Check out the [TS template](https://github.com/vitejs/vite/tree/main/packages/create-vite/template-react-ts) for information on how to integrate TypeScript and [`typescript-eslint`](https://typescript-eslint.io) in your project.
