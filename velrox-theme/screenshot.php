<?php
/**
 * This file generates a placeholder screenshot for the WordPress theme selector.
 * Replace screenshot.png with an actual 1200x900px screenshot of the theme.
 */
header( 'Content-Type: image/svg+xml' );
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 900">
  <rect width="1200" height="900" fill="#0D1B2A"/>
  <rect y="0" width="1200" height="80" fill="#1E3A5F"/>
  <rect x="40" y="24" width="180" height="32" rx="4" fill="#00A6CB" opacity="0.9"/>
  <rect y="80" width="1200" height="620" fill="#0D1B2A"/>
  <text x="600" y="380" font-family="sans-serif" font-weight="bold" font-size="64" fill="#FFFFFF" text-anchor="middle">VELROX</text>
  <text x="600" y="440" font-family="sans-serif" font-size="24" fill="#00A6CB" text-anchor="middle">Global Seafood Trading</text>
  <rect y="700" width="1200" height="200" fill="#080F18"/>
</svg>';
