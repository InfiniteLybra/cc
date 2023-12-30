<?php
class Booking_cron
{
    public function handle_booking_status()
    {
        $this->load->model('Admin_model');
        $current_time = date('Y-m-d H:i:s');

        // Perbarui status booking sesuai dengan waktu
        $bookings_to_check_in = $this->booking_model->get_bookings_to_check_in($current_time);
        foreach ($bookings_to_check_in as $booking) {
            $this->booking_model->update_booking_status($booking->id, 'check in');
        }

        $bookings_to_checkout = $this->booking_model->get_bookings_to_checkout($current_time);
        foreach ($bookings_to_checkout as $booking) {
            $this->booking_model->update_booking_status($booking->id, 'checkout');
        }
    }
}
