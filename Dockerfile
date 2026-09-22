FROM php:8.2-apache

# تعطيل وحدات MPM المتباينة وتفعيل وحدة prefork المناسبة للـ PHP
RUN a2dismod mpm_event mpm_worker && a2enmod mpm_prefork

# تثبيت إضافات قواعد البيانات
RUN docker-php-ext-install pdo pdo_mysql mysqli

# تفعيل الـ Rewrite
RUN a2enmod rewrite

# ضبط البورت ليتوافق مع ريلوي
ENV PORT=80
RUN sed -i "s/80/\${PORT}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
