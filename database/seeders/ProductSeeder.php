<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(
      [
        'name' => 'Video-Based Safety Overview',
        'description' => 'Build a world-class fleet safety program.',
        'product-category' => 'Video-Based Safety'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'AI Dash Cams',
        'description' => 'Real-time incident detection and preventative alerts, supported by AI and computer vision.',
        'product-category' => 'Video-Based Safety'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Driver Safety & Coaching',
        'description' => 'Provide in-cab feedback and video-based coaching to drivers, and track safety trends and improvements over time.',
        'product-category' => 'Video-Based Safety'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Vehicle Telematics Overview',
        'description' => 'A complete fleet management solution for increasing efficiency, safety, and sustainability.',
        'product-category' => 'Vehicle Telematics'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'GPS Fleet Tracking',
        'description' => 'Track your entire fleet with real-time GPS, trip history reports, and geofence alerts.',
        'product-category' => 'Vehicle Telematics'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Fuel & Maintenance',
        'description' => 'Reduce fuel spend with improved reporting, streamline maintenance with real-time diagnostics and paperless DVIRs.',
        'product-category' => 'Vehicle Telematics'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Electric Vehicles',
        'description' => 'Assess EV suitability, get real-time charging status and alerts, plan EV routes, and track energy usage across your fleet.',
        'product-category' => 'Vehicle Telematics'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Routing & Dispatch',
        'description' => 'Track route progress in real-time, share ETA links, and easily analyze and improve route performance.',
        'product-category' => 'Vehicle Telematics'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Apps & Driver Workflows Overview',
        'description' => 'All-in-one app for HOS, documents & messaging, routing & dispatch, and DVIRs.',
        'product-category' => 'App & Driver Workflows'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Compliance & ELD',
        'description' => 'FMCSA-approved ELD solution to simplify HOS management, including a built-in WiFi hotspot.',
        'product-category' => 'App & Driver Workflows'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Documents & Messaging',
        'description' => 'Capture documents in real-time, collect eSignatures, and communicate with back office teams with two-way instant messaging.',
        'product-category' => 'App & Driver Workflows'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'DVIR',
        'description' => 'Make it easy for drivers to submit DVIRs customized to your fleet, to help streamline maintenance and improve uptime.',
        'product-category' => 'App & Driver Workflows'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Equipment Monitoring Overview',
        'description' => 'Track equipment locations, view diagnostics in real-time, and optimize utilization of every asset.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Equipment Tracking',
        'description' => 'Manage unpowered and heavy equipment with tools like geofences, asset scheduling, and time-on-site reports.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Trailer Tracking',
        'description' => 'Track any trailer with real-time GPS, cargo monitoring, and automated reporting and alerts.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Advanced Equipment Monitoring',
        'description' => 'Real-time monitoring, alerts, analytics, and control for mission critical industrial equipment.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Reefer Monitoring',
        'description' => 'Monitor reefer temperature and humidity, get temperature alerts, and take action with two-way reefer control.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Custom Dashboards',
        'description' => 'Keep an eye on your operations from anywhere with easy-to-build, mobile-friendly monitoring dashboards.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Advanced Alerting',
        'description' => 'Create alerts with custom escalation hierarchies and notifications that include current readings, and diagnostic analytics for on-the-spot investigation.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Custom KPIs',
        'description' => 'Calculate key performance indicators, like equipment efficiency scores, from real-time and historical data to make operational improvements.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Equipment Reporting',
        'description' => 'Build and schedule custom compliance, production, and runtime reports across all of your equipment.',
        'product-category' => 'Equipment Monitoring'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Site Visibility Overview',
        'description' => 'Plug in the Site Gateway to your network and set up the cloud VMS in under 10 minutes.',
        'product-category' => 'Site Visibility'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Site Security',
        'description' => 'Samsara provides cloud-connected video security, without replacing your existing infrastructure.',
        'product-category' => 'Site Visibility'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Platform Overview',
        'description' => 'View your entire operation in one cloud-based platform with integrated sensors, cameras, and workflows.',
        'product-category' => 'Data & Integrations'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Reports & Alerts',
        'description' => 'Reports & Alerts Turn data into actionable insights with easy-to-use reports and real-time alerts.',
        'product-category' => 'Data & Integrations'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'App Marketplace',
        'description' => 'Leverage 70+ pre-built, turnkey integrations across TMS, dispatch, maintenance, payroll and more to help connect your systems.',
        'product-category' => 'Data & Integrations'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'OEM Integrations',
        'description' => 'Unlock embedded telematics data from OEMs and bring it directly into the Samsara platform.',
        'product-category' => 'Data & Integrations'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Developer API',
        'description' => 'Start building with the Samsara open API and join the community of developers building the future of connected operations.',
        'product-category' => 'Data & Integrations'
      ]);

      DB::table('products')->insert(
      [
        'name' => 'Site Security',
        'description' => 'Samsara provides cloud-connected video security, without replacing your existing infrastructure.',
        'product-category' => 'Data & Integrations'
      ]);

  }
}
