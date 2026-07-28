/**
 * tailwind.config.js (inline)
 * Konfigurasi Tailwind CSS untuk tema SME Commerce / Katalog IDN
 */
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            "colors": {
                "on-secondary-container": "#656464",
                "surface": "#fbf9f8",
                "surface-bright": "#fbf9f8",
                "on-secondary": "#ffffff",
                "on-surface": "#1b1c1c",
                "error": "#ba1a1a",
                "inverse-on-surface": "#f2f0f0",
                "on-secondary-fixed": "#1c1b1b",
                "on-primary-container": "#6b4c00",
                "surface-tint": "#7c5800",
                "tertiary-fixed": "#e2e3e1",
                "on-error-container": "#93000a",
                "tertiary-container": "#c4c5c3",
                "tertiary-fixed-dim": "#c6c7c5",
                "surface-container-low": "#f5f3f3",
                "on-primary-fixed": "#271900",
                "surface-container-lowest": "#ffffff",
                "primary-fixed": "#ffdea8",
                "outline-variant": "#d5c4ab",
                "outline": "#837560",
                "secondary": "#5f5e5e",
                "on-surface-variant": "#514532",
                "secondary-fixed": "#e5e2e1",
                "on-secondary-fixed-variant": "#474646",
                "on-primary": "#ffffff",
                "inverse-primary": "#ffba20",
                "error-container": "#ffdad6",
                "secondary-fixed-dim": "#c8c6c5",
                "tertiary": "#5d5f5d",
                "surface-dim": "#dbdad9",
                "inverse-surface": "#303031",
                "primary": "#7c5800",
                "secondary-container": "#e5e2e1",
                "background": "#fbf9f8",
                "surface-container-highest": "#e4e2e2",
                "on-tertiary-fixed-variant": "#454746",
                "on-tertiary-fixed": "#1a1c1b",
                "on-error": "#ffffff",
                "on-tertiary": "#ffffff",
                "surface-container": "#efeded",
                "on-background": "#1b1c1c",
                "primary-container": "#ffb800",
                "on-primary-fixed-variant": "#5e4200",
                "primary-fixed-dim": "#ffba20",
                "surface-variant": "#e4e2e2",
                "on-tertiary-container": "#505250",
                "surface-container-high": "#e9e8e7"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "stack-md": "24px",
                "base": "8px",
                "margin-mobile": "16px",
                "margin-desktop": "40px",
                "stack-sm": "12px",
                "stack-lg": "48px",
                "gutter": "24px",
                "container-max": "1280px"
            },
            "fontFamily": {
                "body-sm": ["Plus Jakarta Sans"],
                "headline-sm": ["Hanken Grotesk"],
                "headline-lg": ["Hanken Grotesk"],
                "label-md": ["Hanken Grotesk"],
                "headline-xl-mobile": ["Hanken Grotesk"],
                "body-md": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"],
                "headline-xl": ["Hanken Grotesk"],
                "headline-lg-mobile": ["Hanken Grotesk"],
                "headline-md": ["Hanken Grotesk"]
            },
            "fontSize": {
                "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                "label-md": ["14px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                "headline-xl-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                "headline-xl": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "700" }],
                "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }]
            }
        }
    }
};
