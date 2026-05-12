/*
  # Create Contact Inquiries Table

  1. New Tables
    - `contact_inquiries`
      - `id` (uuid, primary key)
      - `name` (text, full name)
      - `email` (text, contact email)
      - `company` (text, optional company name)
      - `phone` (text, optional phone)
      - `subject` (text, inquiry subject)
      - `message` (text, inquiry message)
      - `created_at` (timestamptz)
      - `status` (text, default 'new')

  2. Security
    - Enable RLS on `contact_inquiries` table
    - Add policy for anonymous inserts (public contact form)
    - No read policy for public (admin only)
*/

CREATE TABLE IF NOT EXISTS contact_inquiries (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  name text NOT NULL,
  email text NOT NULL,
  company text DEFAULT '',
  phone text DEFAULT '',
  subject text NOT NULL,
  message text NOT NULL,
  status text DEFAULT 'new',
  created_at timestamptz DEFAULT now()
);

ALTER TABLE contact_inquiries ENABLE ROW LEVEL SECURITY;

CREATE POLICY "Anyone can submit contact inquiry"
  ON contact_inquiries
  FOR INSERT
  TO anon, authenticated
  WITH CHECK (
    length(trim(name)) > 0
    AND length(trim(email)) > 0
    AND length(trim(message)) > 0
  );
