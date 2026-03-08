# Vercel Deployment Guide for Library Management System

This guide will help you deploy your Laravel Library Management System to Vercel.

## Prerequisites

1. A [Vercel account](https://vercel.com/signup)
2. [Vercel CLI](https://vercel.com/cli) installed (optional, but recommended)
3. Git repository connected to your project

## Project Structure

The project has been configured with the following Vercel-specific files:

- `vercel.json` - Vercel configuration file
- `api/index.php` - Serverless function entry point
- `.vercelignore` - Files to exclude from deployment
- `vercel-build.sh` - Build script (optional)

## Environment Variables

Before deploying, you need to set up environment variables in Vercel. Go to your project settings in Vercel Dashboard and add the following:

### Required Variables:

```env
APP_NAME="Library Management System"
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://your-app.vercel.app

LOG_CHANNEL=stderr
LOG_LEVEL=error

# Database Configuration (Use a cloud database like PlanetScale, Railway, or AWS RDS)
DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password

# Session & Cache (Use cookie/array for serverless)
SESSION_DRIVER=cookie
SESSION_LIFETIME=120
CACHE_DRIVER=array
QUEUE_CONNECTION=sync

# File Storage
FILESYSTEM_DISK=local
```

### Generating APP_KEY:

Run this command locally to generate an application key:
```bash
php artisan key:generate --show
```

Copy the output and add it to your Vercel environment variables.

## Database Setup

⚠️ **Important**: Vercel serverless functions are stateless, so you need an external database.

### Recommended Database Options:

1. **PlanetScale** (MySQL-compatible, free tier available)
   - Visit: https://planetscale.com/
   - Create a database and get connection details

2. **Railway** (PostgreSQL/MySQL, free tier available)
   - Visit: https://railway.app/
   - Create a database and get connection details

3. **AWS RDS** (Production-grade, paid)
   - Visit: https://aws.amazon.com/rds/

4. **Supabase** (PostgreSQL, free tier available)
   - Visit: https://supabase.com/

After setting up your database, update the `DB_*` environment variables in Vercel.

## Deployment Steps

### Option 1: Deploy via Vercel Dashboard (Recommended)

1. Go to [Vercel Dashboard](https://vercel.com/dashboard)
2. Click "Add New Project"
3. Import your Git repository
4. Set the **Root Directory** to `Library-Management-System`
5. Configure environment variables (see above)
6. Click "Deploy"

### Option 2: Deploy via Vercel CLI

1. Install Vercel CLI:
   ```bash
   npm install -g vercel
   ```

2. Navigate to the Laravel project directory:
   ```bash
   cd Library-Management-System
   ```

3. Login to Vercel:
   ```bash
   vercel login
   ```

4. Deploy:
   ```bash
   vercel
   ```

5. Follow the prompts and set up environment variables when asked

6. For production deployment:
   ```bash
   vercel --prod
   ```

## Post-Deployment Steps

### 1. Run Database Migrations

After deployment, you need to run migrations. You can do this by:

**Option A**: Using a local connection to your cloud database:
```bash
# Update your local .env with production database credentials
php artisan migrate --force
```

**Option B**: Create a temporary migration endpoint (⚠️ Remove after use):
```php
// In routes/web.php (TEMPORARY - REMOVE AFTER MIGRATION)
Route::get('/run-migrations', function () {
    if (env('APP_ENV') !== 'production') {
        return 'Not allowed';
    }
    Artisan::call('migrate', ['--force' => true]);
    return 'Migrations completed';
});
```

Visit `https://your-app.vercel.app/run-migrations` once, then remove this route.

### 2. Verify Deployment

Visit your Vercel URL and check:
- ✅ Homepage loads correctly
- ✅ Database connection works
- ✅ Static assets (CSS/JS) load properly
- ✅ Routes are accessible

## Important Notes

### Limitations of Vercel for Laravel:

1. **Stateless Environment**: Each request runs in a fresh container
2. **No File Storage**: Use cloud storage (S3, Cloudinary) for uploads
3. **No Background Jobs**: Use external queue services (Redis, SQS)
4. **10-second Timeout**: Requests must complete within 10 seconds (Hobby plan)
5. **Read-only Filesystem**: Only `/tmp` directory is writable

### Storage Configuration:

The project is configured to use `/tmp` directory for:
- Compiled views
- Cache files
- Session files (use cookie driver instead)

### Recommended Optimizations:

1. **Enable Route Caching** (locally, then commit):
   ```bash
   php artisan route:cache
   php artisan config:cache
   php artisan view:cache
   ```

2. **Optimize Composer Autoloader**:
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Build Assets**:
   ```bash
   npm run build
   ```

## Troubleshooting

### Issue: 500 Internal Server Error
- Check Vercel function logs in the dashboard
- Verify all environment variables are set correctly
- Ensure APP_KEY is set

### Issue: Database Connection Failed
- Verify database credentials in environment variables
- Check if database allows connections from Vercel IPs
- Test connection locally with production credentials

### Issue: Static Assets Not Loading
- Verify `npm run build` was executed
- Check `public/build` directory exists
- Review `vercel.json` routes configuration

### Issue: Routes Not Working
- Check `.htaccess` is present in `public/` directory
- Verify `vercel.json` routes configuration
- Ensure `api/index.php` exists and is correct

## Support

For more information:
- [Vercel Documentation](https://vercel.com/docs)
- [Laravel Documentation](https://laravel.com/docs)
- [Vercel PHP Runtime](https://github.com/vercel-community/php)

## Security Checklist

Before going live:
- [ ] Set `APP_DEBUG=false`
- [ ] Set `APP_ENV=production`
- [ ] Use strong `APP_KEY`
- [ ] Secure database credentials
- [ ] Enable HTTPS (automatic on Vercel)
- [ ] Review and restrict CORS settings
- [ ] Set up proper error logging
- [ ] Remove any debug/test routes

---

**Note**: This is a Laravel application running on a serverless platform. Some features may require additional configuration or external services.
